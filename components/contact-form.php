<section class="contact-us-sec" id="enquiry-form-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="contact-heading" data-aos="fade-up" data-aos-duration="1000">
                    <div class="section-title">LET'S WORK TOGETHER</div>
                    <p>Planning Your Project?</p>
                </div>
            </div>
            <div class="col-lg-10">
                <div class="contact-form" data-aos="fade-up" data-aos-duration="1500">
                    <form id="form1">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="Name" placeholder="Full Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="Company_Name" placeholder="Company Name"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="Location" placeholder="Location" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="Business_Category" placeholder="Business Category"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" name="E-Mail" placeholder="E-mail ID" class="form-control">
                                </div>
                            </div>
                            <input type="hidden" id="Country_Code" name="Country_Code" value="">
                            <input type="hidden" id="Country_Name" name="Country_Name" value="">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input placeholder="Mobile Number" name="Phone" type="tel" id="phone1"
                                        class="form-control" width="100%">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="custom-contact-select">
                                            <div class="dropdown">
                                                <div class="selected">
                                                    What Are You Looking For?
                                                    <span class="arrow"><i class="fas fa-angle-down"></i></span>
                                                </div>
                                                <div class="options">
                                                    <div data-value="Growth & Business Strategy">Growth & Business
                                                        Strategy</div>
                                                    <div data-value="Social Media & Advertising">Social Media &
                                                        Advertising</div>
                                                    <div data-value="Web & App Development">Web & App Development</div>
                                                    <div data-value="Search & Visibility">Search & Visibility</div>
                                                    <div data-value="Creative & Content Production">Creative & Content
                                                        Production</div>
                                                    <div data-value="Branding">Branding</div>
                                                    <div data-value="UI & UX Design">UI & UX Design</div>
                                                    <div data-value="Digital Marketing">Digital Marketing</div>
                                                    <div data-value="SEO">SEO</div>
                                                </div>
                                                <input type="hidden" name="Service_Chosen" id="service-input"
                                                    class="dropdown-input" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="custom-contact-select">
                                            <div class="dropdown">
                                                <div class="selected" id="budget-selected">
                                                    Budget
                                                    <span class="arrow"><i class="fas fa-angle-down"></i></span>
                                                </div>
                                                <div class="options">
                                                    <div data-value="₹10,000 - ₹30,000">STARTER (₹10,000 - ₹30,000)
                                                    </div>
                                                    <div data-value="₹40,000 - ₹80,000">STANDARD (₹40,000 - ₹80,000)
                                                    </div>
                                                    <div data-value="₹1,00,000 and Above">PREMIUM (₹1,00,000 and Above)
                                                    </div>
                                                </div>
                                                <input type="hidden" name="Budget" id="budget-input"
                                                    class="dropdown-input" />
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <textarea class="form-control" name="Query"
                                            placeholder="Please share your additional requirement if any"></textarea>
                                    </div>
                                </div>
                                <input type="hidden" id="Page_URL" name="Page_URL" value="">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="g-recaptcha"
                                            data-sitekey="6Ld5B-EsAAAAAL3iz6GsuPYvJ26vUy3_88GAy5Ec"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <span id="zxcv1" style="display:none;">
                                            <div class="alert alert-info" role="alert">Submitting form..Please
                                                wait...</div>
                                        </span>
                                        <div class="contact-submit">
                                            <a href="javascript:;" onClick="global_form('#form1','#zxcv1');"
                                                class="need-btn"><span><svg xmlns="http://www.w3.org/2000/svg" width="9"
                                                        height="12" viewBox="0 0 10 15" fill="none">
                                                        <path d="M1 1L8 7.5L1 14" stroke="white" stroke-width="2">
                                                        </path>
                                                    </svg></span>get quotation</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="mandatory_fields_except_file_fields"
                                value="Name,E-Mail,Phone,Service_Chosen" />
                            <input type="hidden" id="mandatory_file_fields" value="" />
                            <input type="hidden" id="email_fields" value="E-Mail" />
                            <input type="hidden" id="contact_fields" value="Phone" />
                            <input type="hidden" id="file_fields" value="" />
                            <input type="hidden" id="form_type" value="Footer Form" />
                            <input type="hidden" id="downlaoded_file" value="" />
                            <input type="hidden" id="thanks_message"
                                value="Thank you for showing your interest. We will get back to you very soon.." />
                            <input type="hidden" id="thanks_redirection_status" value="no" />
                            <input type="hidden" id="thanks_url" value="" />
                            <input type="hidden" id="email_from" value="Name,E-Mail" />
                            <input type="hidden" id="duplicate_by_email_enabled" value="" />
                            <input type="hidden" id="duplicate_message" value="" />
                            <input type="hidden" id="email_to" value="dipannama91@gmail.com" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>