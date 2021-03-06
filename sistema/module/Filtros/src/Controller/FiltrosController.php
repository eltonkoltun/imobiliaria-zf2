<?php

namespace Filtros\Controller;

use Shift\SM;
use Filtros\Entity\Filtro;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\JsonModel;

class FiltrosController extends AbstractActionController {

    private $filtrosService;
    private $_usuario;

    public function __construct() {
        $this->filtrosService = SM::get('filtros.service.filtros');
        $this->_usuario = SM::getCliente();
    }

    public function indexAction() {

        $registros = null;
        $form = SM::get('filtros.form.filtro_search');
        $emPesquisa = $this->emPesquisa();
        
        if ($emPesquisa) {
            $form->setData($this->params()->fromQuery());
            if ($form->isValid()) {
                $registros = $this->filtrosService->collection($form->getData(), $this->params()->fromRoute('filtros', 1));
            }
        } else {
            $registros = $this->filtrosService->collection();
        }

        return array(
            'emPesquisa' => $emPesquisa,
            'tituloGrid' => 'Lista de filtros',
            'quantidade' => $this->filtrosService->count(),
            'form' => $form,
            'registros' => $registros,
            'permiteAlterar' => $this->_usuario->permissao->alterar,
        );
    }

    public function formAction() {
        
        $filtro = null;
        $form = SM::get('filtros.form.filtro');
        
        if ($this->request->isGet()) {
            $id = (int) $this->params('id');
        } else {
            $id = (int) $this->request->getPost()->id;
        }
        
        if ($id) {
            $filtro = $this->filtrosService->get($id);
            $title = "Editando {$filtro->getNome()}";
        } else {
            $filtro = new Filtro();
            $title = 'Novo filtro';
        }
               
        $form->bind($filtro);
        
        if ($this->request->isPost()) {
            
            $retorno = array();
            
            // seta o grupo que deve ser validado
            //$form->setValidationGroup('id', 'titulo', 'description');
            
            // seta os filtros para validacao do form
            $form->setInputFilter($filtro->getInputFilter());
            $form->setData($this->request->getPost());
            
            if ($form->isValid()) {
                $this->filtrosService->save($filtro);
                $this->flash()->success('Operação realizada com sucesso.');
                $this->highlight("tr#filtro_{$filtro->getId()}");
                $retorno['code'] = 'OK';
            } else {
                $retorno['code'] = 'ERROR';
                $retorno['errors'] = $form->getMessages();
                $retorno['flashError'] = 'Um ou mais erros impedem a gravação dos dados.';
            }
            return new JsonModel($retorno);
        }
        
        
        /// é necessario setar o pai no form, pois retorna como objeto do banco
        $form->get('pai')->setValue($filtro->getPai()->getId());
        
        $form->prepare();
        return array(
            'title' => $title,
            'form' => $form,
            'filtro' => $filtro,
            'permiteAlterar' => $this->_usuario->permissao->alterar,
        );
    }

    public function visivelAction() {

        $id = (int) $this->params('id');
        $filtro = $this->filtrosService->get($id);
        
        if(!$filtro || !$this->_usuario->permissao->alterar){
            $this->flash()->error('Registro não encontrado ou não é possível alterá-lo!');
            return $this->redirect()->toRoute('filtros');
        }
        
        // verifica se está ativo
        if ($filtro->isVisivel() == 1) {
            $filtro->setVisivel(0);
        } else {
            $filtro->setVisivel(1);
        }

        $this->filtrosService->save($filtro);
        $this->flash()->success('Status de registro alterado com sucesso.');

        return $this->redirect()->toRoute('filtros');
    }
    
    public function excluirAction() {

        $id = (int) $this->params('id');
        $filtro = $this->filtrosService->get($id);
        
        if(!$filtro || !$this->_usuario->permissao->alterar){
            $this->flash()->error('Registro não encontrado ou não é possível removê-lo!');
            return $this->redirect()->toRoute('filtros');
        }
        
        $this->filtrosService->remove($filtro);
        $this->flash()->success('Registro removido com sucesso.');

        return $this->redirect()->toRoute('filtros');
    }

    private function emPesquisa() {
        
        foreach ($this->params()->fromQuery() as $key => $value) {
            if ($value != '') {
                return true;
            }
        }
        return false;
    }

}
