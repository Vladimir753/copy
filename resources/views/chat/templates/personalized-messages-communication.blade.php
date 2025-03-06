<div id="fields">
    <p class="input-label"><strong>VARIABLE</strong></p>
    <p class="label-info">Variables are additional sub-prompts to the main prompt that provide different variations for the same type of content.</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>RECIPIENT PROFESSION</strong></p>
    <p class="label-info">The recipient's profession or industry (e.g., Marketing Manager, Tech Recruiter, Startup Founder).</p>
    <input name="change[{{ $recipientProfession }}]" class="input-style" required>

    <p class="input-label"><strong>TONE</strong></p>
    <p class="label-info">The style of the message (e.g., formal, casual, warm).</p>
    <input name="change[{{ $messageTone }}]" class="input-style" required>

    <p class="input-label"><strong>CONNECTION PURPOSE</strong></p>
    <p class="label-info">The reason for the connection request (e.g., networking, job inquiry, collaboration).</p>
    <input name="change[{{ $connectionPurpose }}]" class="input-style" required>
</div>
