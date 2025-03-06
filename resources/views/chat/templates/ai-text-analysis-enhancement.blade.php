<div id="fields">
    <p class="input-label"><strong>VARIABLE</strong></p>
    <p class="label-info">Variables are additional sub-prompts to the main prompt that provide different variations for the same type of content.</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>ORIGINAL TEXT</strong></p>
    <p class="label-info">The text that needs to be analyzed and improved (e.g., product description, blog paragraph, email copy).</p>
    <input name="change[{{ $originalText }}]" class="input-style" required>
</div>
