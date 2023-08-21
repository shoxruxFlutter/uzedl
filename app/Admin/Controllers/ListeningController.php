<?php

namespace App\Admin\Controllers;

use App\Models\ListeningModel;
use App\Models\LessonsModel;
use App\Models\CategoryModel;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ListeningController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'ListeningModel';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ListeningModel());

        $grid->column('id', __('Id'));
        
        $grid->column('category_id', __('Category id'));
        $grid->column('lessons_id', __('Lessons id'));
        $grid->column('title', __('Title'));
        $grid->column('img', __('Img'))->image();
        $grid->column('audio', __('Audio'))->display(function($audio){
            return ' <audio controls>
            <source src="/storage/'.$audio.'" type="audio/mp3">
        
        </audio>';
        });
        $grid->column('instructions', __('Instructions'));
        $grid->column('preparation', __('Preparation'));
        $grid->column('transcript', __('Transcript'));
        $grid->column('task1', __('Task1'));
        $grid->column('task2', __('Task2'));
        $grid->column('task3', __('Task3'));
        $grid->column('task4', __('Task4'));
        $grid->column('task5', __('Task5'));
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
        $show = new Show(ListeningModel::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('category_id', __('Category id'));
        $show->field('lessons_id', __('Lessons id'));
        $show->field('title', __('Title'));
        $show->field('img', __('Img'));
        $show->field('audio', __('Audio'));
        $show->field('instructions', __('Instructions'));
        $show->field('preparation', __('Preparation'));
        $show->field('transcript', __('Transcript'));
        $show->field('task1', __('Task1'));
        $show->field('task2', __('Task2'));
        $show->field('task3', __('Task3'));
        $show->field('task4', __('Task4'));
        $show->field('task5', __('Task5'));
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
        $form = new Form(new ListeningModel());

        $categoryId = CategoryModel::query()->get()->pluck('title', 'id');
        $form->select('category_id', __('Category id'))->required()->options($categoryId);
        $lessonId = LessonsModel::query()->get()->pluck('title', 'id');
        $form->select('lessons_id', __('Lessons id'))->required()->options($lessonId);
        $form->text('title', __('Title'));
        $form->image('img', __('Img'));
        $form->file('audio', __('Audio'));
        $form->text('instructions', __('Instructions'));
        $form->text('preparation', __('Preparation'));
        $form->text('transcript', __('Transcript'));
        $form->text('task1', __('Task1'));
        $form->text('task2', __('Task2'));
        $form->text('task3', __('Task3'));
        $form->text('task4', __('Task4'));
        $form->text('task5', __('Task5'));

        return $form;
    }
}
