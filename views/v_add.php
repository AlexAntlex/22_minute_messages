<form method="post" enctype="multipart/form-data">
    <h3>Your Message is?</h3>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="title" class="form-control" placeholder="tell me briefly, what are you talking about?" value="" />
                <input type="file" name="img" value="pic">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-info btn-md" value="Send message">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <textarea name="content" class="form-control" placeholder="And here tell me what you want to send" style="width: 100%; height: 150px;"></textarea>
            </div>
        </div>
        
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
        </svg>
        <div class="error-list">
        <? foreach($validateErrors as $errors): ?>
            <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                    <div>
                    <p><?=$errors?></p>
                    </div>
            </div>
	    <? endforeach; ?>
</div>
    </div>
</form>
