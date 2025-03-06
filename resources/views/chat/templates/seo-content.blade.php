<div id="fields">
    <p class="input-label"><strong>VARIABLE</strong></p>
    <p class="label-info">Variables are additional sub-prompts to the main prompt that provide different variations for the same type of content.</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>CONTENT TYPE</strong></p>
    <p class="label-info">The type of SEO content (e.g., meta description, blog outline).</p>
    <input name="change[{{ $contentType }}]" class="input-style" required>

    <p class="input-label"><strong>SEO TOPIC</strong></p>
    <p class="label-info">The main topic or subject (e.g., digital marketing tools, fitness tips).</p>
    <input name="change[{{ $seoTopic }}]" class="input-style" required>

    <p class="input-label"><strong>KEYWORDS LIST</strong></p>
    <p class="label-info">A list of target keywords to include (e.g., "AI copywriting", "email automation").</p>
    <input name="change[{{ $keywordsList }}]" class="input-style" required>

    <p class="input-label"><strong>CONTENT LENGTH</strong></p>
    <p class="label-info">The content length preference (e.g., concise, detailed).</p>
    <input name="change[{{ $contentLength }}]" class="input-style" required>
</div>
