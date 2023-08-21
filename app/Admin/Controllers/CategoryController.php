<?php

namespace App\Admin\Controllers;

use App\Models\CategoryModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class CategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'CategoryModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new CategoryModel());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Title'));
        $grid->column('subTitle', __('SubTitle'));
        $grid->column('content', __('Content'));
        $grid->column('img', __('Img'))->image();
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
        $show = new Show(CategoryModel::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('title', __('Title'));
        $show->field('subTitle', __('SubTitle'));
        $show->field('content', __('Content'));
        $show->field('img', __('Img'));
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
        $form = new Form(new CategoryModel());

        $form->text('title', __('Title'));
        $form->text('subTitle', __('SubTitle'));
        $form->textarea('content', __('Content'));
        $form->image('img', __('Img'));

        return $form;
    }
}
