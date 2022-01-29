<form class="needs-validation" id='emailsentform' name='emailsentform'>
    <div class="form-row">
        <div class="col-md-12 mb-3">

            <label class="form-label">To<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter to" type="text" id="to" name="to" required="">
            <div class="invalid-feedback">
                Please Enter to.
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 mb-3">

            <label class="form-label">Subject<span class="text-danger">*</span></label>
            <input class="form-control" placeholder="Enter subject" type="text" id="subject" name="subject" required="">
            <div class="invalid-feedback">
                Please Enter subject.
            </div>
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-12 mb-3">
            <div class="summernote" id="saveToLocal"></div>
            <input type="text" style="height: 0px; width: 0px ; border: none;" id='messageemail' name="ip_customer_email_history__email_content" required="">
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
        </div>
        <div class="demo col-md-6 pull-right">
            <button id="js-add-btn" class="btn btn-primary btn-md float-right" type="button" onclick='' data-dismiss="modal"><i class="fal fa-paper-plane" style="margin-right: 4px"></i>Send Email</button>
        </div>
    </div>
</form>


<script type="text/javascript">
    $(document).ready(function() {
        $('.summernote').summernote();
    });
    $('#saveToLocal').summernote({
        placeholder: 'Email Content',
        tabsize: 10,
        height: 200
    });
</script>