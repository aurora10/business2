<?php

use Encore\Admin\Form;
use App\Admin\Extensions\Form\CKEditor;

Form::extend('ckeditor', CKEditor::class);

Encore\Admin\Form::forget(['map', 'editor']);
