@extends('admin.layouts.master')

@section('head-tag')
    <title>ایجاد بازی</title>
    <style>
        .sections_windows{
            display: none;
        }

        .sections_android{
            display: none;
        }
    </style>
@endsection

@section('content')
    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>
                        بازی
                    </h5>
                </section>

                <section>
                    <form action="" method="">
                        <section class="row">
                            <section class="col-12 col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="">نام بازی</label>
                                    <input type="text" class="form-control form-control-sm" name="" id="">
                                </div>
                            </section>
                            <section class="col-12 col-md-6 mt-3">
                                <div class="form-group">
                                    <label for="">پلتفرم</label>
                                    <select name="" id="platform" class="form-control form-control-sm">
                                        <option value="not selected">انتخاب پلتفرم</option>
                                        <option value="android">اندروید</option>
                                        <option value="windows">ویندوز</option>
                                    </select>
                                </div>
                            </section>

                            <!-- Android -->
                            <section class="col-12 col-md-6 mt-3 sections_android">
                                <div class="form-group">
                                    <label for="">نام پکیج</label>
                                    <input type="text" name="package_name" class="form-control">
                                </div>
                            </section>
                            <section class="col-12 col-md-6 mt-3 sections_android">
                                <div class="form-group">
                                    <label for="">is most played</label>
                                    <input type="radio" id="html" name="is_most_played">
                                </div>
                            </section>
                            <section class="col-12 col-md-6 mt-3 sections_android">
                                <div class="form-group">
                                    <label for="">آپلود تصویر اول</label>
                                    <input type="file" name="picture_1" class="form-control">
                                </div>
                            </section>
                            <section class="col-12 col-md-6 mt-3 sections_android">
                                <div class="form-group">
                                    <label for="">آپلود تصویر دوم</label>
                                    <input type="file" name="picture_2" class="form-control">
                                </div>
                            </section>
                            <section class="col-12 col-md-6 mt-3 sections_android">
                                <div class="form-group">
                                    <label for="">آپلود تصویر سوم</label>
                                    <input type="file" name="picture_3" class="form-control">
                                </div>
                            </section>
                            <section class="col-12 col-md-6 mt-3 sections_android">
                                <div class="form-group">
                                    <label for="">آپلود تصویر چهارم</label>
                                    <input type="file" name="picture_4" class="form-control">
                                </div>
                            </section>


                            <!-- Windows -->
                            <section class="col-12 col-md-6 mt-3 sections_windows">
                                <div class="form-group">
                                    <label for="">is logo inverted</label>
                                    <input type="radio" id="html" name="is_logo_inverted">
                                </div>
                            </section>
                            <section class="col-12 col-md-6 mt-3 sections_windows">
                                <div class="form-group">
                                    <label for="">آپلود تصویر اول</label>
                                    <input type="file" name="picture_1" class="form-control">
                                </div>
                            </section>
                            <section class="col-12 col-md-6 mt-3 sections_windows">
                                <div class="form-group">
                                    <label for="">آپلود تصویر دوم</label>
                                    <input type="file" name="picture_2" class="form-control">
                                </div>
                            </section>
                            <section class="col-12 col-md-6 mt-3 sections_windows">
                                <div class="form-group">
                                    <label for="">آپلود تصویر سوم</label>
                                    <input type="file" name="picture_3" class="form-control">
                                </div>
                            </section>

                            <section class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary btn-sm">ثبت</button>
                            </section>
                        </section>
                    </form>
                </section>
            </section>
        </section>
    </section>


    <script>
        document.getElementById("platform").addEventListener('change', (e) => {
            if(e.target.value == "windows"){
                document.querySelectorAll(".sections_android").forEach(section => {
                    section.style="display: none"
                })
                document.querySelectorAll(".sections_windows").forEach(section => {
                    section.style="display: block"
                })
            }else if(e.target.value == "android"){
                document.querySelectorAll(".sections_windows").forEach(section => {
                    section.style="display: none"
                })
                document.querySelectorAll(".sections_android").forEach(section => {
                    section.style="display: block"
                })
            }
        });
    </script>
@endsection
