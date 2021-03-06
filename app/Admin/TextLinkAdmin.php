<?php namespace App\Admin;

use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class TextLinkAdmin extends Admin {
	protected $baseRoutePattern = 'text-link';
	protected $baseRouteName = 'admin_text_link';

	protected function configureShowField(ShowMapper $showMapper) {
		$showMapper
			->add('text')
			->add('site')
			->add('code')
			->add('description')
		;
	}

	protected function configureListFields(ListMapper $listMapper) {
		$listMapper
			->add('text')
			->add('site')
			->addIdentifier('code')
			->add('_action', 'actions', [
				'actions' => [
					'show' => [],
					'edit' => [],
					'delete' => [],
				]
			])
		;
	}

	protected function configureFormFields(FormMapper $formMapper) {
		$formMapper->with('General attributes')
			//->add('text')
			->add('site')
			->add('code')
			->add('description')
			->end();
	}

	protected function configureDatagridFilters(DatagridMapper $datagrid) {
		$datagrid
			->add('text')
			->add('site')
			->add('code')
		;
	}

}
