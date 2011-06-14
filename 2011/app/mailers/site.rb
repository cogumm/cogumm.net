class Site < ActionMailer::Base
  default :from => "contato@cogumm.net"

  # Subject can be set in your I18n file at config/locales/en.yml
  # with the following lookup:
  #
  #   en.site.contact.subject
  #

  def contact(params)
    mail :from => params[:email], :to => "contato@cogumm.net", :subject => "[CoGUMm.net] Contato pelo site", :body => "email:\n#{params[:email]}\n\nnome:\n#{params[:name]}\n\nmensagem:\n#{params[:message]}"
  end

end
