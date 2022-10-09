<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\LocationRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Backpack\ReviseOperation\ReviseOperation;
use Venturecraft\Revisionable\RevisionableTrait;

/**
 * Class LocationCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class LocationCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use ReviseOperation;
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Location::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/location');
        CRUD::setEntityNameStrings('location', 'locations');
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('company_id');
        CRUD::addColumn(
            [  // Select
                'label' => "Category",
                'name' => 'location_category_id', // the db column for the foreign key
                'entity' => 'category', // the method that defines the relationship in your Model
                'attribute' => 'location_category_name', // foreign key attribute that is shown to user
            ]
        );
        CRUD::column('location_code');
        CRUD::column('location_name');
        CRUD::column('location_email');
        CRUD::column('location_address');
        CRUD::column('location_phone_number');
        CRUD::column('location_status');
        CRUD::column('created_at');
        CRUD::column('updated_at');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation([
            // 'name' => 'required|min:2',
        ]);


        CRUD::addField([  // Select
            'label' => "Company",
            'type' => 'select',
            'name' => 'company_id', // the db column for the foreign key
            'entity' => 'company', // the method that defines the relationship in your Model
            'attribute' => 'company_name', // foreign key attribute that is shown to user
            'allows_null' => false,
            'allows_multiple' => false
              ]);


        CRUD::addField([  // Select
            'label' => "Location Category",
            'type' => 'select',
            'name' => 'location_category_id', // the db column for the foreign key
            'entity' => 'category', // the method that defines the relationship in your Model
            'attribute' => 'location_category_name', // foreign key attribute that is shown to user
            'allows_null' => false,
            'allows_multiple' => false
        ]);

        // CRUD::field('location_category_id');

        CRUD::field('location_code');
        CRUD::field('location_name');
        CRUD::field('location_email');
        CRUD::field('location_address');
        CRUD::field('location_phone_number');
        CRUD::addField(['name'=>'location_status',    'type' => 'select_from_array',    'options' => ['Active'=>'Active','Disabled'=>'Disabled'],    'allows_null' => false,'allows_multiple' => false]);



        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
