<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<div id="wrapper">
<div class="content">
<div class="panel_s">
    <div class="panel-body">
<div class="calculator">
      <div class="title">GST <span>Calculator</span></div>

      <div class="grid">
        <div class="field">
          <label>Amount</label>
          <input
            type="number"
            min="0"
            step="any"
            id="amount"
            placeholder="Enter amount"
            oninput="calculateGST()"
          />
        </div>

        <div class="field">
          <label>GST %</label>
          <input
            type="number"
            min="0"
            step="any"
            id="gst"
            placeholder="Eg: 2, 18, 21.5"
            oninput="calculateGST()"
          />
        </div>

        <div class="field">
          <label>Tax Type</label>
          <select id="taxType" onchange="calculateGST()">
            <option value="exclusive">Exclusive</option>
            <option value="inclusive">Inclusive</option>
          </select>
        </div>
      </div>

      <div class="results">
        <div class="result-box">
          <div class="value" id="actual">0.00</div>
          <div class="label">Actual Amount</div>
        </div>

        <div class="result-box">
          <div class="value" id="gstAmount">0.00</div>
          <div class="label">GST Amount</div>
        </div>

        <div class="result-box totals">
          <div class="value" id="totals">0.00</div>
          <div class="label">Total Amount</div>
        </div>
      </div>
    </div>
    </div>
</div>
</div>
</div>
<?php init_tail(); ?>

        <!-- <button class="btn btn-primary" onclick="openGSTCalculator()">
            Open GST Calculator
        </button> -->