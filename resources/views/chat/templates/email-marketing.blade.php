<div id="fields">
    <p class="input-label"><strong>VARIABLE</strong></p>
    <p class="label-info">Variables are additional sub-prompts to the main prompt that provide different variations for the same type of content.</p>
    <input name="change[{{ $variable }}]" class="input-style" required>
    <p class="input-label"><strong>EMAIL PURPOSE</strong></p>
    <p class="label-info">The primary purpose of the email (e.g. promotion, post-purchase communication, user engagement).</p>
    <input name="change[{{ $emailPurpose }}]" class="input-style" required>
    <p class="input-label"><strong>TARGET AUDIENCE</strong></p>
    <p class="label-info">The type of audience (e.g. new customer, loyal customer, potential customer).</p>
    <input name="change[{{ $targetAudience }}]" class="input-style" required>
    <p class="input-label"><strong>EMAIL TONE</strong></p>
    <p class="label-info">The tone of communication (e.g. friendly, professional, urgent).</p>
    <input name="change[{{ $emailTone }}]" class="input-style" required>
    <p class="input-label"><strong>Min Character Length</strong></p>
    <p class="label-info">Minimum Number Of Characters For The Final Description</p>
    <input name="change[minCharacters]" class="input-style" required>
    <p class="input-label"><strong>Max Character Length</strong></p>
    <p class="label-info">Maximum Number Of Characters For The Final Description</p>
    <input name="change[maxCharacters]" class="input-style" required>
</div>
