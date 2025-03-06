<div id="fields">
    <p class="input-label"><strong>VARIABLE</strong></p>
    <p class="label-info">Variables are additional sub-prompts to the main prompt that provide different variations for the same type of content.</p>
    <input name="change[{{ $variable }}]" class="input-style" required>

    <p class="input-label"><strong>CUSTOMER QUESTION</strong></p>
    <p class="label-info">The specific issue the user is asking about (e.g., payment failure, product return, delivery delay).</p>
    <input name="change[{{ $customerQuery }}]" class="input-style" required>

    <p class="input-label"><strong>TONE</strong></p>
    <p class="label-info">The style of the response (e.g., friendly, formal, concise).</p>
    <input name="change[{{ $responseTone }}]" class="input-style" required>
</div>
