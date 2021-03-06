<?php

namespace App\Admin\Controllers;

use App\Models\Article;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class ArticleController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Article';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Article());

        $grid->column('id', __('Id'));
        $grid->column('name', __('Name'));
        $grid->column('birthday', __('Birthday'));
        $grid->column('age', __('Age'));
        $grid->column('birthplace_id', __('Birthplace id'));
        $grid->column('sex', __('Sex'));
        $grid->column('comment', __('Comment'));
        $grid->column('image', __('Image'));
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
        $show = new Show(Article::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('birthday', __('Birthday'));
        $show->field('age', __('Age'));
        $show->field('birthplace_id', __('Birthplace id'));
        $show->field('sex', __('Sex'));
        $show->field('comment', __('Comment'));
        $show->field('image', __('Image'));
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
        $form = new Form(new Article());

        $form->text('name', __('Name'));
        $form->date('birthday', __('Birthday'))->default(date('Y-m-d'));
        $form->number('age', __('Age'));
        $form->number('birthplace_id', __('Birthplace id'));
        $form->text('sex', __('Sex'));
        $form->text('comment', __('Comment'));
        $form->image('image', __('Image'))->move('article_image')->uniqueName();;

        return $form;
    }
}
