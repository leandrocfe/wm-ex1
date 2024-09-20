# Nested resources in Filament V3

First, install the package:

```terminal
composer require saade/filament-extra
```

```html blade!
<x-content.code-test />
```


## Introduction

This guide will show you how to create a nested resource in Filament V3. We will be creating a `Product` resource that has a `Category` relationship. The `Category` resource will be nested within the `Product` resource.

## Creating the Product resource

To create the `Product` resource, run the following command:

```terminal
php artisan filament:resources Product
```

```code lang=php
public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('artist_id')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('title')
                    ->required(),
                Forms\Components\DatePicker::make('release_date')
                    ->required(),
                Forms\Components\FileUpload::make('cover_image')
                    ->image(),
            ]);
    }
```

This command will create a `Category` resource with a `name` field.

## Creating the relationship

To create the relationship between the `Product` and `Category` resources, run the following command:

```terminal
php artisan filament:resources:relationship Product category_id
```

This command will create a relationship between the `Product` and `Category` resources. The relationship will be a `belongsTo` relationship, meaning that the `Product` resource will have a `category_id` field that is a dropdown field that allows you to select a category from the database.

## Creating the nested resource

To create the nested resource, run the following command:

```terminal
php artisan filament:resources:nested Product category_id
```

This command will create a nested resource for the `Product` resource. The nested resource will be a `Category` resource that is nested within the `Product` resource.

## Creating the nested resource's relationship

To create the nested resource's relationship, run the following command:

```terminal
php artisan filament:resources:relationship Category product_id
```

This command will create a relationship between the `Category` and `Product` resources.
