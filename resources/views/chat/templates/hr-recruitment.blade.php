<div id="fields">
    <p class="input-label"><strong>VARIABLE</strong></p>
    <p class="label-info">Variables are additional sub-prompts to the main prompt that provide different variations for the same type of content.</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>JOB TITLE</strong></p>
    <p class="label-info">The job title for the position (e.g., Marketing Manager, Frontend Developer).</p>
    <input name="change[{{ $jobTitle }}]" class="input-style" required>

    <p class="input-label"><strong>KEY HIGHLIGHTS</strong></p>
    <p class="label-info">The key aspects to emphasize (e.g., company culture, benefits, required skills).</p>
    <input name="change[{{ $keyHighlights }}]" class="input-style" required>
</div>
