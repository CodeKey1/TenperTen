<!DOCTYPE html>
<html lang="en">


<!-- forms-validation.html  21 Nov 2019 03:55:16 GMT -->

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    @include('Back.yeild.tittle')
    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/bundles/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="assets/bundles/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="assets/bundles/izitoast/css/iziToast.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
</head>

<body class="light theme-white dark-sidebar">
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">

            @include('Back.yeild.sidebar')
            <!-- Main Content -->
            <div class="main-content">
                <section class="section">
                    <div class="section-body">
                        <div class="row" style="direction: rtl">
                            <div class="col-12 col-md-12 col-lg-12">

                                <div class="card card-primary">
                                    @include('layouts.success')
                                    @include('layouts.error')
                                    <form class="needs-validation" novalidate="" action="{{ route('product.save') }}"
                                        method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="card-header">
                                            <h4>اضافة خدمة </h4>
                                            <div class="card-header-action">
                                                <div class="dropdown">
                                                    <a href="#" data-toggle="dropdown"
                                                        class="btn btn-warning dropdown-toggle">الإعدادت</a>
                                                    <div class="dropdown-menu" style="background-color: rgb(53, 60, 72);">
                                                        <a href="#" class="dropdown-item has-icon text-success"><i
                                                                class="fas fa-eye"></i>اضافة وارد حديد</a>
                                                        <a href="#" class="dropdown-item has-icon text-info"><i
                                                                class="far fa-edit"></i> تقارير</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a href="" class="dropdown-item has-icon text-info"><i
                                                                class="fas fa-archive"></i>
                                                               الأرشيف </a>
                                                    </div>
                                                </div>

                                                <a href="{{ route('home') }}" class="btn btn-primary">الرئيسية</a>
                                            </div>
                                        </div>
                                        <div class="card-body">

                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label> القسم</label>
                                                    <div class="custom-file">
                                                        <select class="form-control" name="categorys_id">
                                                            @if ($category && $category->count() > 0)
                                                            @foreach ($category as $Category)
                                                            <option value="{{ $Category->id }}">{{ $Category->name }}</option>
                                                            @endforeach
                                                            @endif
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label> اسم المورد</label>
                                                    <div class="input-group">
                                                        <select class="form-control" name="categorys_id">
                                                            @if ($suppliers && $suppliers->count() > 0)
                                                            @foreach ($suppliers as $supplier)
                                                            <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                                            @endforeach
                                                            @endif
                                                        </select>

                                                    </div>
                                                </div>
                                            </div>


                                            <div class="form-row">

                                                {{-- <div class="form-group col-md-6">
                                                    <label>حالة القسم</label>
                                                    <div class="input-group">
                                                        <select class="form-control" name="state">
                                                            <option value="1">نشط</option>
                                                            <option value="0">غير نشط</option>
                                                        </select>

                                                    </div>
                                                </div> --}}

                                            </div>
                                            <div class="form-row" id="work_experience">
                                                <div class="form-group col-md-4">
                                                    <label> اسم المنتج</label>
                                                    <input type="text" class="form-control"placeholder=" اسم المنتج">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label> الكمية</label>
                                                    <input type="number" name="xp-year" class="form-control"placeholder="الكمية">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label> السعر</label>
                                                    <input type="number" name="work-xp" class="form-control"placeholder="السعر">
                                                </div>
                                            </div>
                                            <a href="javascript:void(0)" style="padding: 5px 10px 5px 10px;"
                                                id="addWork-btn" class="btn btn-primary form-label"
                                                onclick="addWorkRow()">+ اضف منتج</a>
                                            <hr>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button class="btn btn-primary" type="submit">حفظ</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <div class="settingSidebar">
                    <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
                    </a>
                    <div class="settingSidebar-body ps-container ps-theme-default">
                        <div class=" fade show active">
                            <div class="setting-panel-header">Setting Panel
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Select Layout</h6>
                                <div class="selectgroup layout-color w-50">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="1"
                                            class="selectgroup-input-radio select-layout" checked>
                                        <span class="selectgroup-button">Light</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="value" value="2"
                                            class="selectgroup-input-radio select-layout">
                                        <span class="selectgroup-button">Dark</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                                <div class="selectgroup selectgroup-pills sidebar-color">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="1"
                                            class="selectgroup-input select-sidebar">
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="icon-input" value="2"
                                            class="selectgroup-input select-sidebar" checked>
                                        <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                                            data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <h6 class="font-medium m-b-10">Color Theme</h6>
                                <div class="theme-setting-options">
                                    <ul class="choose-theme list-unstyled mb-0">
                                        <li title="white" class="active">
                                            <div class="white"></div>
                                        </li>
                                        <li title="cyan">
                                            <div class="cyan"></div>
                                        </li>
                                        <li title="black">
                                            <div class="black"></div>
                                        </li>
                                        <li title="purple">
                                            <div class="purple"></div>
                                        </li>
                                        <li title="orange">
                                            <div class="orange"></div>
                                        </li>
                                        <li title="green">
                                            <div class="green"></div>
                                        </li>
                                        <li title="red">
                                            <div class="red"></div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox"
                                            class="custom-switch-input" id="mini_sidebar_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Mini Sidebar</span>
                                    </label>
                                </div>
                            </div>
                            <div class="p-15 border-bottom">
                                <div class="theme-setting-options">
                                    <label class="m-b-0">
                                        <input type="checkbox" name="custom-switch-checkbox"
                                            class="custom-switch-input" id="sticky_header_setting">
                                        <span class="custom-switch-indicator"></span>
                                        <span class="control-label p-l-10">Sticky Header</span>
                                    </label>
                                </div>
                            </div>
                            <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                                    <i class="fas fa-undo"></i> Restore Default
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    <a href="templateshub.net">Templateshub</a></a>
                </div>
                <div class="footer-right">
                </div>
            </footer>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="assets/js/app.min.js"></script>
    <!-- JS Libraies -->
    <!-- Page Specific JS File -->
    <script src="assets/bundles/izitoast/js/iziToast.min.js"></script>
    <!-- Page Specific JS File -->
    <script src="assets/js/page/toastr.js"></script>
    <!-- Template JS File -->
    <script src="assets/js/scripts.js"></script>
    <!-- Custom JS File -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/bundles/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="assets/bundles/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script>
        function addWorkRow() {
            var elements = document.getElementsByClassName('work-xp-input');
            var empty = "no"
            for (var i = 0; i < elements.length; i++) {
                if (elements[i].value == "") {
                    empty = "yes"
                }
            }

            if (empty == "no" && document.getElementsByClassName("work-xp").length < 4) {
                const div = document.createElement('div');
                div.className = 'card-body form-row';
                div.innerHTML = `
                <div class="form-group col-md-3">
                    <input type="text" class="form-control"placeholder=" اسم المنتج">
                </div>
                <div class="form-group col-md-4">
                    <input type="number" name="xp-year" class="form-control"placeholder="الكمية">
                </div>
                <div class="form-group col-md-4">
                    <input type="number" name="work-xp" class="form-control"placeholder="السعر">
                </div>

                <input type="button" class="btn-danger" style="width: 50px;
                 height: 35px;" value="x" onclick="removeWorkRow(this)" />
                `;
                document.getElementById('work_experience').appendChild(div);
                if (document.getElementsByClassName("work-xp").length == 4) {
                    document.getElementById("addWork-btn").style.display = "none";
                }
                if (document.getElementsByClassName("work-xp").length != 4) {
                    document.getElementById("addWork-btn").style.display = "block";
                }
            } else {
                alert("برجاء ملء البيانات!");
            }
        }

        function removeWorkRow(input) {
            confirm("متأكد؟") ? document.getElementById('work_experience').removeChild(input.parentNode) : 0;
            if (document.getElementsByClassName("work-xp").length != 4) {
                document.getElementById("addWork-btn").style.display = "block";
            }
        }
    </script>
    <script>
        function addSkillRow() {
            var elements = document.getElementsByClassName('skill-input');
            var empty = "no"
            for (var i = 0; i < elements.length; i++) {
                if (elements[i].value == "") {
                    empty = "yes"
                }
            }

            if (empty == "no" && document.getElementsByClassName("skills").length < 10) {
                const div = document.createElement('div');
                div.className = 'col-md-4 skills';
                div.innerHTML = `
                <div class="h5">
                <select type="text" name="skill_id[]" class="skill-input" id="" placeholder="اسم المهارة">
                <optgroup label="من فضلك أخترالمهارة "></optgroup>

                <option value=""</option>

                </select>
                <a href="javascript:void(0)" style="padding: 5px 20px 5px 20px;"
                            class="btn btn-danger form-label" onclick="removeSkillRow(this)">-</a>
              </div>
            `;
                document.getElementById('skills').appendChild(div);
                if (document.getElementsByClassName("skills").length == 9) {
                    document.getElementById("addSkill-btn").style.display = "none";
                }
                if (document.getElementsByClassName("skills").length != 9) {
                    document.getElementById("addSkill-btn").style.display = "block";
                }
            } else {
                alert("برجاء ملء البيانات!");
            }
        }

        function removeSkillRow(input) {
            confirm("متأكد؟") ? document.getElementById('skills').removeChild(input.parentNode.parentNode) : 0;
            if (document.getElementsByClassName("skills").length != 9) {
                document.getElementById("addSkill-btn").style.display = "block";
            }
        }
    </script>
</body>


<!-- forms-validation.html  21 Nov 2019 03:55:16 GMT -->

</html>
