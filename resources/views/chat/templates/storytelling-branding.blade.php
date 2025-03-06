<div id="fields">
    <p class="input-label"><strong>VARIABLE</strong></p>
    <p class="label-info">Variables are additional sub-prompts to the main prompt that provide different variations for the same type of content.</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>CONTENT TYPE</strong></p>
    <p class="label-info">The type of content to be generated (e.g., mission statement, brand story).</p>
    <input name="change[{{ $contentType }}]" class="input-style" required>

    <p class="input-label"><strong>CONTENT NAME</strong></p>
    <p class="label-info">The name of the company or brand.</p>
    <input name="change[{{ $companyName }}]" class="input-style" required>

    <p class="input-label"><strong>TONE</strong></p>
    <p class="label-info">The desired tone of the content (e.g., bold, inspirational, trustworthy).</p>
    <input name="change[{{ $brandTone }}]" class="input-style" required>

    <p class="input-label"><strong>TARGET AUDIENCE</strong></p>
    <p class="label-info">The specific audience the content should resonate with (e.g., young entrepreneurs, eco-conscious consumers).</p>
    <input name="change[{{ $targetAudience }}]" class="input-style" required>
</div>
