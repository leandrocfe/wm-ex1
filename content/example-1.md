# Adding a form to a Livewire component

## Introduction

The Form Builder package comes pre-installed with the Panel Builder. This guide explains how to use the Form Builder in a custom TALL Stack application (Tailwind CSS, Alpine.js, Livewire, and Laravel).

With the Form Builder, you can easily add forms to any Livewire component within your applications or websites. This article will guide you through the process of integrating and utilizing the Filament Form Builder in your projects.

### Setting up the Livewire component

First, generate a new Livewire component:

```bash
php artisan make:livewire ContactForm
```

Then, you can use a full-page Livewire component:

<livewire:code-explorer :files="[
    '../wm-ex1/routes/web.php'
]" />

### Adding the form

Implement the HasForms interface and use the InteractsWithForms trait.

Add a form() method, which is where you configure the form. Add the form's schema, and tell Filament to store the form data in the $data property (using statePath('data')).
Initialize the form with $this->form->fill() in mount(). This is imperative for every form that you build, even if it doesn't have any initial data.

<livewire:code-explorer :files="[
    '../wm-ex1/app/Livewire/ContactForm.php'
]" />

### Rendering the form

Finally, in your Livewire component's view, render the form:

<livewire:code-explorer :files="[
    '../wm-ex1/resources/views/livewire/contact-form.blade.php'
]" />

#### Note
> <`x-filament-actions::modals /> is used to render form component action modals. The code can be put anywhere outside the `form` element, as long as it's within the Livewire component.
