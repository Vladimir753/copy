<div id="fields">
    <p class="input-label"><strong>VARIABLE</strong></p>
    <p class="label-info">Variables are additional sub-prompts to the main prompt that provide different variations for the same type of content.</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>TOPIC</strong></p>
    <p class="label-info">The topic or product for the ad copy (e.g., new phone, software service, course).</p>
    <input name="change[{{ $adTopic }}]" class="input-style" required>

    <p class="input-label"><strong>PLATFORM</strong></p>
    <p class="label-info">The platform where the ad will be published (Google Ads, Facebook Ads, LinkedIn Ads).</p>
    <input name="change[{{ $adPlatform }}]" class="input-style" required>

    <p class="input-label"><strong>TARGET AUDIENCE</strong></p>
    <p class="label-info">The target audience (e.g., small business owners, marketing specialists, students).</p>
    <input name="change[{{ $targetAudience }}]" class="input-style" required>

    <p class="input-label"><strong>KEY BENEFITS</strong></p>
    <p class="label-info">The key benefits that should be emphasized (e.g., free shipping, discount, innovative technology).</p>
    <input name="change[{{ $keyBenefits }}]" class="input-style" required>
</div>
