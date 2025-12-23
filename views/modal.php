<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<div class="modal fade" id="gstCalculatorModal" tabindex="-1">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">

<div class="calculator">
      <div class="title">GST <span>Calculator</span></div>

      <div class="grid">
        <div class="field">
          <label>Amount</label>
          <input
            type="number"
            min="0"
            step="any"
            id="amounts"
            placeholder="Enter amount"
            oninput="calculateGST2()"
          />
        </div>

        <div class="field">
          <label>GST %</label>
          <input
            type="number"
            min="0"
            step="any"
            id="gsts"
            placeholder="Eg: 2, 18, 21.5"
            oninput="calculateGST2()"
          />
        </div>

        <div class="field">
          <label>Tax Type</label>
          <select id="taxTypes" onchange="calculateGST2()">
            <option value="exclusive">Exclusive</option>
            <option value="inclusive">Inclusive</option>
          </select>
        </div>
      </div>

      <div class="results">
        <div class="result-box">
          <div class="value" id="actuals">0.00</div>
          <div class="label">Actual Amount</div>
        </div>

        <div class="result-box">
          <div class="value" id="gstAmounts">0.00</div>
          <div class="label">GST Amount</div>
        </div>

        <div class="result-box totals">
          <div class="value" id="totalss">0.00</div>
          <div class="label">Total Amount</div>
        </div>
      </div>
    </div>

      </div>
    </div>
  </div>
</div>
