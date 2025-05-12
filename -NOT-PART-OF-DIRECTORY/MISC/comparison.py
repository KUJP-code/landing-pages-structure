import pandas as pd

# File paths – update if needed
main_file = "booking_data.csv"         # Your full bookings CSV
id_file = "id_list.csv"                # Campaign-generated booking IDs (text list in CSV file)

# Load main booking file
main_df = pd.read_csv(main_file)

# Load campaign ID list from "csv" but treat it as plain text
with open(id_file, "r", encoding="utf-8") as f:
    id_lines = f.read().splitlines()

# Extract just the numeric ID from each line like /en/invoices/29928?updated=true
campaign_ids = set()
for line in id_lines:
    line = line.strip()
    if "/invoices/" in line:
        try:
            id_str = line.split("/invoices/")[1].split("?")[0]
            campaign_ids.add(int(id_str))
        except (IndexError, ValueError):
            pass  # ignore malformed lines

# Prepare counters
match_count = 0
total_cost = 0
photobook_count = 0

# Find matches in main booking file
matches = main_df[main_df["id"].isin(campaign_ids)]

for _, row in matches.iterrows():
    match_count += 1
    cost = int(row["total_cost"])
    total_cost += cost
    if cost == 3500:
        photobook_count += 1

# Calculate percentage based on total number of entries in the main file
percentage_matches = (match_count / len(main_df)) * 100 if len(main_df) else 0

# Output summary
output = f"""\
Number of matching IDs: {match_count}
% of Matches from the main file: {percentage_matches:.2f}%
Total Cost: ¥{total_cost:,}
Photobook Addon From Matches: {photobook_count}
"""

# Write to file
with open("comparison_summary.txt", "w", encoding="utf-8") as out:
    out.write(output)

print("✅ Comparison complete. Results saved to 'comparison_summary.txt'.")
