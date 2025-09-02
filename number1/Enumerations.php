<?php

// Single enum declaration with int backing values and helper method
enum InvoiceStatus: int
{
    case Sent = 0;
    case Paid = 1;
    case Cancelled = 2;

    public function text(): string
    {
        return match ($this) {
            self::Sent => 'Sent',
            self::Paid => 'Paid',
            self::Cancelled => 'Cancelled',
        };
    }
}

// Print name (case name)
function printInvoiceStatus(InvoiceStatus $status): void
{
    echo "Case name: " . $status->name . "<br>\n";
}

// Print text() and numeric value
function getInvoiceStatus(InvoiceStatus $status): void
{
    echo "Text: " . $status->text() . "<br>\n";
    echo "Value: " . $status->value . "<br>\n";
}

// Examples
echo "<strong>Examples</strong><br>\n";
printInvoiceStatus(InvoiceStatus::Sent);
getInvoiceStatus(InvoiceStatus::Paid);

// Iterate all cases
echo "<strong>All cases</strong><br>\n";
foreach (InvoiceStatus::cases() as $case) {
    echo $case->name . ' (' . $case->value . '): ' . $case->text() . "<br>\n";
}

?>