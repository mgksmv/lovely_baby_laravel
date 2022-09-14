<?php

namespace App\Admin\Controllers;

use App\Models\ProductImage;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ProductImageController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ProductImage';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ProductImage());

        $grid->column('id', __('Id'));
        $grid->column('product_id', __('Product id'));
        $grid->column('image', __('Image'));
        $grid->column('thumbnail', __('Thumbnail'));
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
        $show = new Show(ProductImage::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('product_id', __('Product id'));
        $show->field('image', __('Image'));
        $show->field('thumbnail', __('Thumbnail'));
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
        $form = new Form(new ProductImage());

        $form->number('product_id', __('Product id'));
        $form->image('image', __('Image'));
        $form->text('thumbnail', __('Thumbnail'));

        return $form;
    }
}
