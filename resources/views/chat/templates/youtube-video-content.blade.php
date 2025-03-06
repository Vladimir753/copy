<div id="fields">
    <p class="input-label"><strong>VARIABLE</strong></p>
    <p class="label-info">Variables are additional sub-prompts to the main prompt that provide different variations for the same type of content.</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>VIDEO TOPIC</strong></p>
    <p class="label-info">The main topic of the video.</p>
    <input name="change[{{ $videoTopic }}]" class="input-style" required>

    <p class="input-label"><strong>VIDEO LENGTH</strong></p>
    <p class="label-info">The desired length of the video (e.g., 2 minutes, 10 minutes).</p>
    <input name="change[{{ $videoLength }}]" class="input-style" required>

    <p class="input-label"><strong>TONE</strong></p>
    <p class="label-info">The tone of the video (e.g., informative, entertaining, persuasive).</p>
    <input name="change[{{ $toneStyle }}]" class="input-style" required>
</div>
