<!DOCTYPE html>
<html>

<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="https://code.jquery.com/jquery-2.1.1.min.js"
    type="text/javascript"></script>
<title>PHP Contact Form with Add More File Attachment Option</title>
</head>

<body>
    <h1>PHP Contact Form with Add More File Attachment Option</h1>

    <div class="attachment-form-container">
        <form name="mailForm" id="mailForm" method="post" action=""
            enctype="multipart/form-data"
            onsubmit="return validate()">

            <div class="input-row">
                <label style="padding-top: 20px;">Name</label> <span
                    id="userName-info" class="info"></span><br /> <input
                    type="text" class="input-field" name="userName"
                    id="userName" />
            </div>
            <div class="input-row">
                <label>Email</label> <span id="userEmail-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="userEmail" id="userEmail" />
            </div>
            <div class="input-row">
                <label>Subject</label> <span id="subject-info"
                    class="info"></span><br /> <input type="text"
                    class="input-field" name="subject" id="subject" />
            </div>
            <div class="input-row">
                <label>Message</label> <span id="userMessage-info"
                    class="info"></span><br />
                <textarea name="userMessage" id="userMessage"
                    class="input-field" id="userMessage" cols="60"
                    rows="6"></textarea>
            </div>
            <div class="attachment-row">
                <input type="file" class="input-field"
                    name="attachment[]">

            </div>

            <div onClick="addMoreAttachment();"
                class="icon-add-more-attachemnt"
                title="Add More Attachments">
                <img src="icon-add-more-attachment.png"
                    alt="Add More Attachments">
            </div>
            <div>
                <input type="submit" name="send" class="btn-submit"
                    value="Send" />

                <div id="statusMessage">
                    <?php
                        if (! empty($message)) {
                            ?>
                    <p class='<?php echo $type; ?>Message'>
                        <?php echo $message; ?>
                    </p>
                    <?php
                        }
                        ?>
                </div>
            </div>
        </form>
    </div>

</body>
</html>
