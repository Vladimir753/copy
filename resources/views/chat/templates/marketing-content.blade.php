<div id="fields">
    <p class="input-label"><strong>VARIABLE</strong></p>
    <p class="label-info">Variables are additional sub-prompts to the main prompt that provide different variations for the same type of content.</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>CONTENT TYPE</strong></p>
    <p class="label-info">The type of content (e.g., blog post, product description, landing page copy).</p>
    <input name="change[{{ $contentType }}]" class="input-style" required>

    <p class="input-label"><strong>CONTENT TOPIC</strong></p>
    <p class="label-info">The main topic or subject (e.g., digital marketing trends, new software feature).</p>
    <input name="change[{{ $contentTopic }}]" class="input-style" required>

    <p class="input-label"><strong>TONE</strong></p>
    <p class="label-info">The style of writing (e.g., casual, professional, persuasive).</p>
    <input name="change[{{ $toneStyle }}]" class="input-style" required>

    <p class="input-label"><strong>KEY FOCUS</strong></p>
    <p class="label-info">The main focus of the content (e.g., key benefits, problem-solving, storytelling).</p>
    <input name="change[{{ $keyFocus }}]" class="input-style" required>
</div>
