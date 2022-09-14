<?php

namespace App\Admin\Controllers;

use App\Models\Collection;
use App\Models\CustomSpecification;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CollectionController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Collection';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Collection());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('description', __('Description'));
        $grid->column('price', __('Price'));
        $grid->column('image', __('Image'));
        $grid->column('image_2', __('Image 2'));
        $grid->column('instruction', __('Instruction'));
        $grid->column('material', __('Material'));
        $grid->column('color', __('Color'));
        $grid->column('patina', __('Patina'));
        $grid->column('made_in', __('Made in'));
        $grid->column('bed_size', __('Bed size'));
        $grid->column('drawer_size', __('Drawer size'));
        $grid->column('wardrobe_size', __('Wardrobe size'));
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
        $show = new Show(Collection::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('description', __('Description'));
        $show->field('price', __('Price'));
        $show->field('image', __('Image'));
        $show->field('image_2', __('Image 2'));
        $show->field('instruction', __('Instruction'));
        $show->field('material', __('Material'));
        $show->field('color', __('Color'));
        $show->field('patina', __('Patina'));
        $show->field('made_in', __('Made in'));
        $show->field('bed_size', __('Bed size'));
        $show->field('drawer_size', __('Drawer size'));
        $show->field('wardrobe_size', __('Wardrobe size'));
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
        $form = new Form(new Collection());

        $form->text('name', __('Name'));
        $form->textarea('description', __('Description'));
        $form->number('price', __('Price'));
        $form->image('image', __('Image'));
        $form->image('image_2', __('Image 2'));
        $form->file('instruction', __('Instruction'));
        $form->text('material', __('Material'));
        $form->color('color', __('Color'));
        $form->text('patina', __('Patina'));
        $form->text('made_in', __('Made in'));
        $form->text('bed_size', __('Bed size'));
        $form->text('drawer_size', __('Drawer size'));
        $form->text('wardrobe_size', __('Wardrobe size'));
        $form->text('slug', __('Slug'));
        $form->switch('is_published', __('Is published'))->default(1);

        $form->hasMany('additional_specifications', function (Form\NestedForm $form) {
            $form->select('custom_specification_id', __('Custom specification'))->options(CustomSpecification::all()->pluck('name', 'id'));
            $form->text('value', __('Value'));
        });

        return $form;
    }
}
