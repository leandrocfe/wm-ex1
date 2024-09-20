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

```bash
php artisan filament:resources Product
```

```code php
<?php

namespace BenBjurstrom\Prezet\Extensions;

use Illuminate\Container\Container;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\View\Component;
use League\CommonMark\Environment\EnvironmentBuilderInterface;
use League\CommonMark\Event\DocumentRenderedEvent;
use League\CommonMark\Extension\CommonMark\Node\Block\FencedCode;
use League\CommonMark\Extension\ExtensionInterface;
use League\CommonMark\Node\Node;
use League\CommonMark\Renderer\ChildNodeRendererInterface;
use League\CommonMark\Renderer\NodeRendererInterface;

class MarkdownBladeExtension implements ExtensionInterface, NodeRendererInterface
{
    public static bool $allowBladeForNextDocument = false;

    public function register(EnvironmentBuilderInterface $environment): void
    {
        $environment->addRenderer(FencedCode::class, $this, 100);
        $environment->addEventListener(DocumentRenderedEvent::class, [$this, 'onDocumentRenderedEvent']);
    }
```

This command will create a `Category` resource with a `name` field.

## Creating the relationship

To create the relationship between the `Product` and `Category` resources, run the following command:

```bash
php artisan filament:resources:relationship Product category_id
```

This command will create a relationship between the `Product` and `Category` resources. The relationship will be a `belongsTo` relationship, meaning that the `Product` resource will have a `category_id` field that is a dropdown field that allows you to select a category from the database.

## Creating the nested resource

To create the nested resource, run the following command:

```bash
php artisan filament:resources:nested Product category_id
```

This command will create a nested resource for the `Product` resource. The nested resource will be a `Category` resource that is nested within the `Product` resource.

## Creating the nested resource's relationship

To create the nested resource's relationship, run the following command:

```bash
php artisan filament:resources:relationship Category product_id
```

This command will create a relationship between the `Category` and `Product` resources.
