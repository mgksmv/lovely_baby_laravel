<?php

namespace App\Admin\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Collection;
use App\Models\CustomSpecification;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Product';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product());

        $grid->column('id', __('Id'));
        $grid->column('category_id', __('Category id'));
        $grid->column('collection_id', __('Collection id'));
        $grid->column('name', __('Name'));
        $grid->column('description', __('Description'));
        $grid->column('price', __('Price'));
        $grid->column('instruction', __('Instruction'));
        $grid->column('material', __('Material'));
        $grid->column('color', __('Color'));
        $grid->column('patina', __('Patina'));
        $grid->column('made_in', __('Made in'));
        $grid->column('size', __('Size'));
        $grid->column('slug', __('Slug'));
        $grid->column('is_published', __('Is published'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Product::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category_id', __('Category id'));
        $show->field('collection_id', __('Collection id'));
        $show->field('name', __('Name'));
        $show->field('description', __('Description'));
        $show->field('price', __('Price'));
        $show->field('instruction', __('Instruction'));
        $show->field('material', __('Material'));
        $show->field('color', __('Color'));
        $show->field('patina', __('Patina'));
        $show->field('made_in', __('Made in'));
        $show->field('size', __('Size'));
        $show->field('slug', __('Slug'));
        $show->field('is_published', __('Is published'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Product());

        $form->select('category_id', __('Category'))->options(Category::all()->pluck('name', 'id'));
        $form->select('collection_id', __('Collection'))->options(Collection::all()->pluck('name', 'id'));
        $form->text('name', __('Name'));
        $form->textarea('description', __('Description'));
        $form->number('price', __('Price'));
        $form->file('instruction', __('Instruction'));
        $form->text('material', __('Material'));
        $form->color('color', __('Color'));
        $form->text('patina', __('Patina'));
        $form->text('made_in', __('Made in'));
        $form->text('size', __('Size'));
        $form->text('slug', __('Slug'));
        $form->switch('is_published', __('Is published'))->default(1);

        $form->hasMany('additional_specifications', function (Form\NestedForm $form) {
            $form->select('custom_specification_id', __('Custom specification'))->options(CustomSpecification::all()->pluck('name', 'id'));
            $form->text('value', __('Value'));
        });

        $form->hasMany('images', function (Form\NestedForm $form) {
            $form->image('image', __('Image'));
            $form->image('thumbnail', __('Thumbnail'));
        });

        return $form;
    }
}
