<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>TAyo</title>

    <meta name="description" content="" />
    @include('admin/template/styles')
</head>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            @include('admin/template/sidebar')
            <!-- Overlay -->
            <div class="layout-overlay layout-menu-toggle"></div>
            <div class="layout-page">
                @include('admin/template/header')
                <div class="content-wrapper">
                    @yield('content_admin')
                </div>
            </div>
        </div>
    </div>
    @include('admin/template/scripts')
</body>

</html>
