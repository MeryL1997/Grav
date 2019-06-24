---
title: 'Contact Us'
onpage_menu: false
body_classes: 'modular header-lite fullwidth'
bg_color: '#B4B093'
form:
    name: my-nice-form
    action: /contact
    fields:
        -
            name: name
            id: name
            label: Name
            classes: 'form-control form-control-lg'
            placeholder: 'Introduzca su nombre'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            id: email
            classes: 'form-control form-control-lg'
            label: Email
            placeholder: 'Introduzca su email'
            type: email
            validate:
                rule: email
                required: true
        -
            name: tel
            id: tel
            label: Telefono
            classes: 'form-control form-control-lg'
            placeholder: 'Introduzca su  numero de telefono'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: dateb
            id: dateb
            label: 'Fecha Nacimiento'
            classes: 'form-control form-control-lg'
            placeholder: 'Introduzca su fecha nacimiento'
            autocomplete: 'on'
            type: date
            validate: null
            required: true
        -
            name: gene
            id: gene
            label: Genero
            classes: 'form-control form-control-lg'
            placeholder: 'Seleciones su genero'
            autocomplete: 'on'
            type: radio
            options:
                Masculino: Masculino
                Femenino: Femenino
                Otro: Otro
            validate: null
            required: true
        -
            name: ecivil
            id: ecivil
            label: 'Estado Civil'
            classes: 'form-control form-control-lg'
            placeholder: 'Elija su estado civil'
            autocomplete: 'on'
            type: select
            options:
                Soltero: Soltero
                Casado: Casado
                Viudo: Viudo
                Unión_Libre: 'Unión libre'
            validate: null
            required: true
        -
            name: message
            label: Message
            classes: 'form-control form-control-lg'
            size: long
            placeholder: 'Enter your message'
            type: textarea
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Submit
            class: 'btn btn-primary btn-block'
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to:
                    - '{{ form.value.email }}'
                subject: '[Feedback] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: feedback-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Thank you for your feedback!'
        -
            display: thankyou
content:
    items: '@self.modular'
    order:
        by: default
        dir: asc
---

