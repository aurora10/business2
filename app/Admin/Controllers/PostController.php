<?php

namespace App\Admin\Controllers;

use App\Post;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;


use App\Admin\Extensions\Form\CKEditor;

//Form::extend('ckeditor', CKEditor::class);

class PostController extends AdminController

{

    
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Post';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Post());

        $grid->column('id', __('Id'));
        $grid->column('title', __('Name'));
        $grid->column('excerpt', __('Excerpt'));
        $grid->column('slug', __('Slug'));
        $grid->column('body', __('Body'));
        $grid->column('image', __('ImageURL'));
        $grid->column('video_url', __('VideoURL'));
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
        
        
        $show = new Show(Post::findOrFail($id));


        $show->column('id', __('Id'));
        $show->column('title', __('Name'));
        $show->column('excerpt', __('Excerpt'));
        $show->column('slug', __('Slug'));
        $show->column('body',  __('Body'));
        $show->column('image', __('ImageURL'));
        $show->column('video_url', __('VideoURL'));
        $show->column('created_at', __('Created at'));
        $show->column('updated_at', __('Updated at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Post());

        $form->text('title', __('Name'));
        $form->text('excerpt', __('Excerpt'));
        $form->text('slug', __('Slug'));
        
        $form->quill('body', __('Body'));
        
        
        $form->image('image', __('ImageURL'));
       

        $form->url('video_url', __('VideoURL'));
       

        return $form;
    }
}
