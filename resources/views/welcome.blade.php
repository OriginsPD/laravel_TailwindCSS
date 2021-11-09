<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.4/css/pro.min.css" rel="stylesheet">

</head>
<body class="bg-gray-200 h-screen antialiased leading-none font-sans">




<x-table title="Student Information">

    <x-slot name="headerBtn">

        <x-table.button.top >

            Add Student

        </x-table.button.top>

    </x-slot>

    <x-slot name="head">

        <x-table.head> Name </x-table.head>

        <x-table.head> Subject </x-table.head>

        <x-table.head> Class </x-table.head>

        <x-table.head>  </x-table.head>

    </x-slot>

    <x-table.row>

        <x-table.cell> Akeem Henry </x-table.cell>

        <x-table.cell> Programming </x-table.cell>

        <x-table.cell> A5 </x-table.cell>

        <x-table.cell class="flex space-x-2">

            <x-table.button.action >

                Edit

            </x-table.button.action>

            <x-table.button.action >

                View

            </x-table.button.action>

        </x-table.cell>

    </x-table.row>

</x-table>

</body>
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</html>
