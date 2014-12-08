
open(sql,">buildcats.sql");
open(src,"categories.txt");
$first = <src>;
while(<src>) {
	chop $_;
	($id, $line_id, $title, $desc) = split(/\t/, $_, 4);
	
	# Get desc
	$description = "";
	open(desc,"cats/$desc/FeatureText.txt");
	while(<desc>) {
		$description .= $_;
	}
	close(desc);
	$description =~ s/\n|\r/ /g;
	$description =~ s/\'/\`\'/g;
	$description =~ s/  / /g;
	print sql "INSERT INTO categories (id, line_id, title, description, created_at, updated_at), VALUES (\'$id\', \'$line_id\', \'$title\', \'$description\', NOW(), NOW());\n";
}
close(src);
close(sql);
