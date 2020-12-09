<?php

namespace App\Admin\Controllers;

use App\Members;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class MemberController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Members';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Members());

        $grid->column('id', __('Id'));
        $grid->column('firstName', __('FirstName'));
        $grid->column('lastName', __('LastName'));
        $grid->column('email', __('Email'));
        $grid->column('address1', __('Address1'));
        $grid->column('address2', __('Address2'));
        $grid->column('postcode', __('Postcode'));
        $grid->column('DOB', __('DOB'));
        $grid->column('phone', __('Phone'));
        $grid->column('subscription', __('Subscription'));
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
        $show = new Show(Members::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('firstName', __('FirstName'));
        $show->field('lastName', __('LastName'));
        $show->field('email', __('Email'));
        $show->field('address1', __('Address1'));
        $show->field('address2', __('Address2'));
        $show->field('postcode', __('Postcode'));
        $show->field('DOB', __('DOB'));
        $show->field('phone', __('Phone'));
        $show->field('subscription', __('Subscription'));
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
        $form = new Form(new Members());

        $form->text('firstName', __('FirstName'));
        $form->text('lastName', __('LastName'));
        $form->email('email', __('Email'));
        $form->text('address1', __('Address1'));
        $form->text('address2', __('Address2'));
        $form->text('postcode', __('Postcode'));
        $form->date('DOB', __('DOB'))->default(date('Y-m-d'));
        $form->number('phone', __('Phone'));
        $form->text('subscription', __('Subscription'));

        return $form;
    }
}
