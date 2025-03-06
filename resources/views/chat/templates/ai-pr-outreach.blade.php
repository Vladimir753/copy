<div id="fields">
    <p class="input-label"><strong>VARIABLE</strong></p>
    <p class="label-info">Variables are additional sub-prompts to the main prompt that provide different variations for the same type of content.</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>ANNOUNCEMENT TOPIC</strong></p>
    <p class="label-info">The subject of the press release (e.g., product launch, company partnership, new service).</p>
    <input name="change[{{ $announcementTopic }}]" class="input-style" required>

    <p class="input-label"><strong>KEY INFORMATION</strong></p>
    <p class="label-info">Important details to include (e.g., release date, unique features, company background).</p>
    <input name="change[{{ $keyInformation }}]" class="input-style" required>

    <p class="input-label"><strong>TONE</strong></p>
    <p class="label-info">The tone of the press release (e.g., formal, storytelling, promotional).</p>
    <input name="change[{{ $toneStyle }}]" class="input-style" required>
</div>
