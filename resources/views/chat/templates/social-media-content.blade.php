<div id="fields">
    <p class="input-label"><strong>VARIABLE</strong></p>
    <p class="label-info">Variables are additional sub-prompts to the main prompt that provide different variations for the same type of content.</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>SOCIAL PLATFORM</strong></p>
    <p class="label-info">The social media platform where the post will be published (e.g., Instagram, LinkedIn, Twitter).</p>
    <input name="change[{{ $socialPlatform }}]" class="input-style" required>

    <p class="input-label"><strong>TOPIC</strong></p>
    <p class="label-info">The main subject of the post (e.g., product launch, industry trend, motivational quote).</p>
    <input name="change[{{ $postTopic }}]" class="input-style" required>

    <p class="input-label"><strong>GOAL</strong></p>
    <p class="label-info">The primary goal of the post (e.g., engagement, brand awareness, sales).</p>
    <input name="change[{{ $postGoal }}]" class="input-style" required>

    <p class="input-label"><strong>TONE</strong></p>
    <p class="label-info">The desired tone of the content (e.g., funny, inspirational, professional).</p>
    <input name="change[{{ $postTone }}]" class="input-style" required>

    <p class="input-label"><strong>CHARACTER LIMIT</strong></p>
    <p class="label-info">The maximum character count if applicable (e.g., 280 for Twitter, no limit for LinkedIn) .</p>
    <input name="change[{{ $characterLimit }}]" class="input-style" required>
</div>
