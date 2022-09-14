<?php

namespace App\Admin\Controllers;

use App\Models\WebsiteInfo;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class WebsiteInfoController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'WebsiteInfo';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new WebsiteInfo());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('logo', __('Logo'));
        $grid->column('address', __('Address'));
        $grid->column('phone_number', __('Phone number'));
        $grid->column('email', __('Email'));
        $grid->column('vk', __('Vk'));
        $grid->column('telegram', __('Telegram'));
        $grid->column('youtube', __('Youtube'));

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
        $show = new Show(WebsiteInfo::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('logo', __('Logo'));
        $show->field('address', __('Address'));
        $show->field('phone_number', __('Phone number'));
        $show->field('email', __('Email'));
        $show->field('vk', __('Vk'));
        $show->field('telegram', __('Telegram'));
        $show->field('youtube', __('Youtube'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new WebsiteInfo());

        $form->text('name', __('Name'));
        $form->image('logo', __('Logo'))->default('/public/images/logo.png');
        $form->text('address', __('Address'));
        $form->text('phone_number', __('Phone number'));
        $form->email('email', __('Email'));
        $form->text('vk', __('Vk'));
        $form->text('telegram', __('Telegram'));
        $form->text('youtube', __('Youtube'));

        return $form;
    }
}
