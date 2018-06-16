<div class='music'>
    <div class='section-title'>
        <div class='pre-text'></div>
        <div class='text'>Music Requests</div>
        <div class='post-text'></div>
    </div>

    <div class='music-description'>
    	We want everyone to have a great time, so we want you to help us build our playlist for the evening.  Fill out your music request(s) below so that we can get it on the playlist.
    </div>
    <div class='no-pitbull'>
    	<span class='disclaimer'>Disclaimer:</span> If you request a Pitbull song, you may be subject to immediate removal from our guest list.
    </div>

    <form id='music-form' method='post' action='mailer.php'>
        <div class='field'>
            <label for='song'>What song do you want to hear? <span class='required'>*</span></label>
            <input type='text' id='song' name='song'>
        </div>

        <div class='field'>
            <label for='artist'>By who? <span class='required'>*</span></label>
            <input type='text' id='artist' name='artist'>
        </div>

        <div class='field'>
            <label for='isItGood'>Are you sure it's good?</label>
            <input type='text' id='isItGood' name='isItGood'>
        </div>

        <div class='field'>
            <label for='submittedBy'>Who's requesting this?</label>
            <input type='text' id='submittedBy' name='submittedBy'></textarea>
        </div>

        <div class='button-container'>
            <button type='submit'>Request</button>
        </div>
    </form>
    <div class='music-form-messages'></div>
</div>