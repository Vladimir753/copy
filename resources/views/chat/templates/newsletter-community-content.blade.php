<div id="fields">
    <p class="input-label"><strong>VARIABLE</strong></p>
    <p class="label-info">Variables are additional sub-prompts to the main prompt that provide different variations for the same type of content.</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>NEWSLETTER TOPIC</strong></p>
    <p class="label-info">The subject or main theme of the newsletter (e.g., product updates, industry trends, community news).</p>
    <input name="change[{{ $newsletterTopic }}]" class="input-style" required>

    <p class="input-label"><strong>AUDIENCE GROUP</strong></p>
    <p class="label-info">The specific audience the newsletter is targeted at (e.g., loyal customers, potential clients, industry professionals).</p>
    <input name="change[{{ $audienceGroup }}]" class="input-style" required>

    <p class="input-label"><strong>NEWSLETTER GOAL</strong></p>
    <p class="label-info">The primary goal of the newsletter introduction (e.g., inform, engage, promote a new product).</p>
    <input name="change[{{ $newsletterGoal }}]" class="input-style" required>

    <p class="input-label"><strong>TONE</strong></p>
    <p class="label-info">The tone in which the content should be written (e.g., casual, professional, inspiring).</p>
    <input name="change[{{ $toneOfVoice }}]" class="input-style" required>
</div>
