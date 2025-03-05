<!DOCTYPE html>
<html lang="en">

<head>
    <?php include('includes/header-links.php') ?>

</head>


<!-- page wrapper -->

<body>

    <div class="boxed_wrapper">


        <?php include('includes/header.php') ?>

        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(<?= base_url() ?>assets/images/background/page-title.jpg);"></div>
            <div class="line-box">
                <div class="line-1"></div>
                <div class="line-2"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <h1><?= $job[0]['title'] ?></h1>

                </div>
            </div>
        </section>

        <section class="myaccount-section">
            <div class="auto-container">
                <div class="row clearfix">

                    <div class="col-lg-12 col-md-12 col-sm-12 register-column">
                        <div class="register-content">
                            <h2>Apply For <?= $job[0]['title'] ?></h2>
                            <div class="form-inner">
                                <form action="<?= base_url('Home/add_apply') ?>" method="post" enctype="multipart/form-data">
                                    <h4>Basic Information</h4>
                                    <br>
                                    <div class="row clearfix">
                                        <div class="col-lg-2 col-md-6 col-sm-12 form-group">
                                            <label>Prefix</label>
                                            <div class="select-box">
                                                <select class="selectmenu" name="prefix" id="countryDropdown">
                                                    <option value="Mr.">Mr.</option>
                                                    <option value="Mrs.">Mrs.</option>
                                                    <option value="Ms.">Ms.</option>
                                                    <option value="Dr.">Dr.</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-10 col-md-6 col-sm-12 form-group">
                                            <label>Full Name</label>
                                            <input type="text" name="name" required="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Email</label>
                                            <input type="email" name="email" required="">
                                        </div>
                                        <div class="col-lg-2 col-md-6 col-sm-12 form-group">
                                            <label>Country Code</label>
                                            <div class="select-box">
                                                <select class="selectmenu" name="country_code" id="countryDropdown">
                                                    <option value="+91">+91</option>
                                                    <option value="+1">+1</option>
                                                    <option value="+44">+44</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 form-group">
                                            <label>Phone Num</label>
                                            <input type="text" name="phone" required="">
                                        </div>

                                    </div>
                                    <h4>Address Information</h4>
                                    <br>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>street</label>
                                            <input type="text" name="street" required="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>city</label>
                                            <input type="text" name="city" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>State</label>
                                            <input type="text" name="state" required="">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Pincode</label>
                                            <input type="text" name="pin_code" required="">
                                        </div>
                                        <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                                            <label>Country</label>
                                            <input type="text" name="country" required="">
                                        </div>


                                    </div>
                                    <h4>Professional Details </h4>
                                    <br>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Current Job Title</label>
                                            <input type="text" name="c_job_title" required="">
                                        </div>

                                        <div class="col-lg-3 col-md-6 col-sm-12 form-group">
                                            <label>Skill Set</label>
                                            <div id="skill-section">
                                                <input type="text" name="skill[]" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 form-group message-btn">
                                            <button type="button" onclick="addSkill()" class="theme-btn btn-two">Add More Skill</button>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Highest Qualification Held *</label>
                                            <div class="select-box">
                                                <select name="qualification" class="selectmenu" id="countryDropdown">
                                                    <option value="Bachelor's">Select</option>

                                                    <option value="Bachelor's">Bachelor's</option>
                                                    <option value="Master's">Master's</option>
                                                    <option value="PhD">PhD</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>
                                    <h4>Add Education</h4>
                                    <br>
                                    <div id="education-section">
                                        <div class="education-entry">
                                            <div class="row clearfix">
                                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                    <label>Institution/School</label>
                                                    <input type="text" name="i_name[]" required="">
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                    <label>Major/Department</label>
                                                    <input type="text" name="department[]" required="">
                                                </div>
                                                <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                                                    <label>Degree</label>
                                                    <input type="text" name="degree[]" required="">
                                                </div>
                                                <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                                                    <label>Duration</label>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">

                                                            <label>From</label>

                                                            <input type="date" name="from[]" required="">
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">

                                                            <label>To</label>
                                                            <input type="date" name="to[]" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                    <div class="custom-controls-stacked">
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" name="currently[]" value="1" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="description">Currently Purshuing</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <button type="button" onclick="removeEntry(this)">Delete</button>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group message-btn">
                                            <button type="button" onclick="addEducation()" class="theme-btn btn-two">Add More EDU</button>
                                        </div>
                                    </div>
                                    <h4>Add Experience </h4>
                                    <br>
                                    <div id="experience-section">
                                        <div class="experience-entry">
                                            <div class="row clearfix">

                                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                    <label>Job Title</label>
                                                    <input type="text" name="job_title[]" required="">
                                                </div>

                                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                    <label>Company</label>
                                                    <input type="text" name="company[]" required="">
                                                </div>
                                                <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                                                    <label>Summary</label>
                                                    <input type="text" name="summary[]" required="">
                                                </div>
                                                <div class="col-lg-12 col-md-6 col-sm-12 form-group">
                                                    <label>Work Duration</label>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">

                                                            <label>From</label>

                                                            <input type="date" name="w_from[]" required="">
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">

                                                            <label>To</label>
                                                            <input type="date" name="w_to[]" required="">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                                    <div class="custom-controls-stacked">
                                                        <label class="custom-control material-checkbox">
                                                            <input type="checkbox" name="currently_working[]" value="1" class="material-control-input">
                                                            <span class="material-control-indicator"></span>
                                                            <span class="description">Currently Working</span>
                                                        </label>
                                                    </div>
                                                </div>

                                                <button type="button" onclick="removeEntry(this)">Delete</button>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group message-btn">
                                            <button type="button" onclick="addExperience()" class="theme-btn btn-two">Add More Exp</button>
                                        </div>

                                    </div>
                                    <h4>Social Links </h4>
                                    <br>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>LinkedIn</label>
                                            <input type="url" name="linkedin" required="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Facebook</label>
                                            <input type="url" name="facebook" required="">
                                            <input type="hidden" name="job_id" value="<?= $job_id ?>" required="">

                                        </div>

                                    </div>
                                    <h4>Attachment Information</h4>
                                    <br>
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Resume</label>
                                            <input type="file" name="resume" required="">
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-sm-12 form-group">
                                            <label>Image</label>
                                            <input type="file" name="image" required="">
                                        </div>


                                        <div class="col-lg-12 col-md-6 col-sm-12 form-group message-btn">
                                            <button type="submit" class="theme-btn btn-two">Submit</button>
                                        </div>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include('includes/footer.php') ?>



    </div>

    <?php include('includes/footer-links.php') ?>
    <script>
        function addEducation() {
            let section = document.getElementById('education-section');
            let entry = document.createElement('div');

            entry.classList.add('row', 'clearfix', 'education-entry');
            entry.innerHTML = document.querySelector('.education-entry').outerHTML;
            section.appendChild(entry);
        }

        function addExperience() {
            let section = document.getElementById('experience-section');
            let entry = document.createElement('div');
            entry.classList.add('row', 'clearfix', 'experience-entry');
            entry.innerHTML = document.querySelector('.experience-entry').outerHTML;
            section.appendChild(entry);
        }

        function addSkill() {
            let section = document.getElementById('skill-section');
            let entry = document.createElement('div');
            entry.classList.add('skill-entry');
            entry.innerHTML = '<br><input type="text" name="skill[]" required> <button type="button" onclick="removeEntry(this)" class="theme-btn btn-two">Delete</button>';
            section.appendChild(entry);
        }

        function removeEntry(button) {
            button.parentNode.remove();
        }
    </script>

</body><!-- End of .page_wrapper -->

</html>