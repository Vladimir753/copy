<div id="fields">
    <p class="input-label"><strong>VARIABLE</strong></p>
    <p class="label-info">Variables are additional sub-prompts to the main prompt that provide different variations for the same type of content.</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>PRODUCT OR SERVICE</strong></p>
    <p class="label-info">The product or service being pitched (e.g., CRM software, fitness program).</p>
    <input name="change[{{ $productOrService }}]" class="input-style" required>

    <p class="input-label"><strong>TARGET AUDIENCE</strong></p>
    <p class="label-info">The target audience for the pitch (e.g., small business owners, fitness enthusiasts).</p>
    <input name="change[{{ $targetAudience }}]" class="input-style" required>

    <p class="input-label"><strong>TONE</strong></p>
    <p class="label-info">The style of communication (e.g., persuasive, authoritative, friendly).</p>
    <input name="change[{{ $toneStyle }}]" class="input-style" required>
</div>
