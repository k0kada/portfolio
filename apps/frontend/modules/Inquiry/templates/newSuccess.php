<? slot('breadcrumb')?>
<?= link_to('トップ', 'homepage') ?> >
お問い合わせ
<? end_slot() ?>
<?= $form->renderFormTag(url_for('inquiry_new')) ?>
<table>
<?= $form; ?>
</table>
<input type="submit" name="submit" value="送信" />
</form>
