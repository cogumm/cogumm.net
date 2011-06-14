module ApplicationHelper
  def license_info
    "Copyright 2008 " + (Date.today.year > 2010 ? "- #{Date.today.year}" : "") +  " CoGUMm.net - " + translate("colophon.age")
  end
end
