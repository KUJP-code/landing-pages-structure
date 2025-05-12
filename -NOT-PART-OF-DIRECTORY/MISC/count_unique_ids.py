import csv
import re

def count_unique_invoice_ids(csv_file_path):
    invoice_ids = set()
    pattern = re.compile(r'/invoices/(\d+)')

    with open(csv_file_path, 'r', newline='', encoding='utf-8') as csvfile:
        reader = csv.reader(csvfile)
        for row in reader:
            for cell in row:
                match = pattern.search(cell)
                if match:
                    invoice_ids.add(match.group(1))

    print(f"Unique invoice IDs found: {len(invoice_ids)}")

# Example usage:
count_unique_invoice_ids('your_file.csv')
