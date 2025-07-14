<h1>Thermal Printer</h1>
{if $printer_do eq 'show_home'}
    {call printer}
{else}
    {call $printer_do}
{/if}

{function name=printer}
    <textarea id="printer_text" class="form-control bg-dark text-light" placeholder="Enter text to print"></textarea>
    <button class="btn btn-sm mt-3 btn-primary" onclick="printer.print()">Print</button>
{/function}
