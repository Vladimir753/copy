<div id="fields">
    <p class="input-label"><strong>VARIABLE</strong></p>
    <p class="label-info">Variables are additional sub-prompts to the main prompt that provide different variations for the same type of content.</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>PRODUCT TITLE</strong></p>
    <p class="label-info">The name of the product (e.g., Wireless Headphones, Skincare Serum)</p>
    <input name="change[{{ $productTitle }}]" class="input-style" required>

    <p class="input-label"><strong>DESCRIPTION FORMAT</strong></p>
    <p class="label-info">The length of the product description (e.g., short, detailed, bullet points)</p>
    <input name="change[{{ $descriptionFormat }}]" class="input-style" required>

    <p class="input-label"><strong>KEY FEATURES</strong></p>
    <p class="label-info">The unique selling points that should be highlighted (e.g., waterproof, eco-friendly, 24-hour battery life)</p>
    <input name="change[{{ $keyFeatures }}]" class="input-style" required>

    <p class="input-label"><strong>TONE</strong></p>
    <p class="label-info">The tone or style of the description (e.g., luxury, minimalist, playful)</p>
    <input name="change[{{ $writingStyle }}]" class="input-style" required>
</div>
