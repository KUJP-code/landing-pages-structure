import pandas as pd

# File paths – adjust as needed
main_file = "booking_data.csv"         # Full bookings CSV
id_file = "id-list.csv"                # Campaign-generated booking IDs
output_file = "matched_bookings.csv"   # Output CSV with matches only

# Load main booking file
main_df = pd.read_csv(main_file)

# Load and extract campaign IDs
with open(id_file, "r", encoding="utf-8") as f:
    lines = f.readlines()

campaign_ids = set()
for line in lines:
    line = line.strip()
    if "/invoices/" in line:
        try:
            id_str = line.split("/invoices/")[1].split("?")[0]
            campaign_ids.add(int(id_str))
        except (IndexError, ValueError):
            continue

# Filter matches
matched_df = main_df[main_df["id"].isin(campaign_ids)].copy()

# Add photobook addon flag
matched_df["photobook_addon"] = matched_df["total_cost"] == 3500

# Save to new CSV
matched_df.to_csv(output_file, index=False)

print(f"✅ Saved {len(matched_df)} matching records to '{output_file}' with photobook flag.")
